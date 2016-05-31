n = gets.chomp.strip.to_i

input = []

n.times do
  input << gets.chomp.strip.to_i
end

#arr.count(&:even?)

def greater(num)
  (num...1000000000).each do |i|
    temp = i.to_s.chars.map(&:to_i)
    return i if temp.length == temp.count(&:even?)
  end
end

def less(num)
  num = num - 1
  r = num..2
  (r.first).downto(r.last).each do |i|
    temp = i.to_s.chars.map(&:to_i)
    return i if temp.length == temp.count(&:even?)
  end
end

out =[]

input.each do |num|
  arr = num.to_s.chars.map(&:to_i)
  if arr.count(&:even?) == arr.length
    out << "Unlimited Power"
  elsif num == 1
    out << num.to_r
  else
    g = greater(num)
    l = less(num)
    nu = g - num
    de = num - l
    out << Rational(nu, de)
  end
end

puts out